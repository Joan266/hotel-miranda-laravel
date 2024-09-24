document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('availability-form');
    const roomId = form.getAttribute('data-room-type-id');
    const dateRangeInput = document.getElementById('date-range');

    const fp = flatpickr(dateRangeInput, {
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
            .then(response => response.json())
            .then(data => {
                if (data.unavailable_dates) {
                    fp.set("disable", data.unavailable_dates);
                }
            })
            .catch(error => {
                console.error('Error fetching unavailable dates:', error);
            });
    }
});
