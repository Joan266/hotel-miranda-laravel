const form = document.getElementById('availability-form');
const dateRangeInputHome = document.getElementById('date-range-home');

const fp_home = flatpickr(dateRangeInputHome, {
    mode: "range",
    minDate: "today",
    altInput: true,
    altFormat: "F j, Y",
    dateFormat: "Y-m-d",
});
