document.addEventListener('DOMContentLoaded', function () {
    const availabilityForm = document.getElementById('availability-form');
    
    if (availabilityForm) {
        flatpickr("#check-in", {
            minDate: "today", 
        });

        flatpickr("#check-out", {
            minDate: "today", 
        });

        availabilityForm.addEventListener('submit', function (event) {
            event.preventDefault(); 
            
            const roomTypeId = this.dataset.roomTypeId;
            const checkIn = document.getElementById('check-in').value;
            const checkOut = document.getElementById('check-out').value;

            fetch(`/rooms/${roomTypeId}/check-availability`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'), 
                },
                body: JSON.stringify({
                    check_in: checkIn,
                    check_out: checkOut,
                }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.available) {
                    alert('Rooms are available! You can proceed with booking.');
                } else {
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while checking availability. Please try again.');
            });
        });
    }
});
