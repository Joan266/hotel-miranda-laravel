const bookNowElement = document.getElementById('book-now');

function changeContentOnHover() {
    bookNowElement.textContent = 'Book Now';
}

function revertContent() {
    bookNowElement.textContent = 'Booking Now';
}

bookNowElement.addEventListener('mouseover', changeContentOnHover);
bookNowElement.addEventListener('mouseout', revertContent);
