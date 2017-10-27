let logoutLink = document.querySelector('a.logout-link')

logoutLink.addEventListener('click', function(){
    this.nextElementSibling.submit()
})