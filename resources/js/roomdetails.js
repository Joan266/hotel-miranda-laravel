const form = document.getElementById('availability-form');
const roomId = form.getAttribute('data-room-type-id');
const dateRangeInputRoomDetails = document.getElementById('date-range-roomdetails');

const fp_roomdetails = flatpickr(dateRangeInputRoomDetails, {
    mode: "range",
    minDate: "today",
    altInput: true,
    altFormat: "F j, Y",
    dateFormat: "Y-m-d",
    disable: [], 
    onReady: function() {
        fetchUnavailableDates(roomId);
    },
});

function fetchUnavailableDates(roomId) {
    fetch(`/rooms/${roomId}/check-availability`)
        .then(response => {
            if (!response.ok) {
                console.error('Network response was not ok', response);
                throw new Error('Error fetching data');
            }
            return response.json(); 
        })
        .then(data => {
            if (data.unavailable_dates && Array.isArray(data.unavailable_dates)) {
                fp_roomdetails.set("disable", data.unavailable_dates);
            } else {
                console.warn('Unavailable dates not found or invalid format:', data);
            }
        })
        .catch(error => {
            console.error('Error fetching unavailable dates:', error);
        });
}
