let deleteButtons = document.querySelectorAll('.delete-video');

[...deleteButtons].forEach(button => button.addEventListener('click', function(event){
    event.preventDefault()
    if(confirm('Are you sure you want to delete this video?')) {
        this.nextElementSibling.submit()
    }
}))