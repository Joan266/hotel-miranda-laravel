const form = document.getElementById('availability-form');
const roomId = form.getAttribute('data-room-type-id');
const dateRangeInput = document.getElementById('date-range');

// Initialize flatpickr with range mode and disabled dates from fetchUnavailableDates
const fp = flatpickr(dateRangeInput, {
    mode: "range",
    minDate: "today",
    altInput: true,
    altFormat: "F j, Y",
    dateFormat: "Y-m-d",
    disable: [], // This will be populated by the fetchUnavailableDates function
    onReady: function() {
        // Fetch unavailable dates when flatpickr is ready
        fetchUnavailableDates(roomId);
    },
});

// Function to fetch unavailable dates for the room
function fetchUnavailableDates(roomId) {
    fetch(`/rooms/${roomId}/check-availability`)
        .then(response => {
            if (!response.ok) {
                // Log and throw an error if the response is not successful
                console.error('Network response was not ok', response);
                throw new Error('Error fetching data');
            }
            return response.json(); // Parse the JSON response
        })
        .then(data => {
            if (data.unavailable_dates && Array.isArray(data.unavailable_dates)) {
                // Set unavailable dates in flatpickr (disable them)
                fp.set("disable", data.unavailable_dates);
            } else {
                // Handle the case where data is not in the expected format
                console.warn('Unavailable dates not found or invalid format:', data);
            }
        })
        .catch(error => {
            // Log any errors that occur during fetch or parsing
            console.error('Error fetching unavailable dates:', error);
        });
}
