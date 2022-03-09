const signInModalButton = document.querySelector(['#sign-in'])
const registerModalButton = document.querySelector(['#register'])

const forgotPasswordButton = document.querySelector(['#forgot-password .link'])

console.log(forgotPasswordButton)

forgotPasswordButton.addEventListener('click', () =>{

    const currentModal = document.getElementById('modalSignIn')
    const modal = document.getElementById('modalForgotPassword')


    event.preventDefault()
    
    openModal(modal)
    closeModal(currentModal)
})

registerModalButton.addEventListener('click', () =>{
    
    const currentNavItem = registerModalButton.parentNode.parentNode

    const navItem = signInModalButton.parentNode.parentNode
    
    hide(currentNavItem)
    unhide(navItem)

    
    const currentModal = document.getElementById('modalSignIn');
    const modal = document.getElementById('modalRegister');

    closeModal(currentModal);
    openModal(modal);

})

signInModalButton.addEventListener('click', () =>{
    const navItem = registerModalButton.parentNode.parentNode

    const currentNavItem = signInModalButton.parentNode.parentNode
    
    hide(currentNavItem)
    unhide(navItem)

    const currentModals = document.querySelectorAll('.modal')

    currentModals.forEach( currentModal =>{
        console.log(currentModal)
        close(currentModal)
    })

    const modal = document.getElementById('modalSignIn');
    openModal(modal);

})


function openModal(modal) {
    if(modal == null) return
    modal.classList.add('active')

}

function closeModal(modal) {
    if(modal == null) return
    modal.classList.remove('active')

}

function hide(element){
    if(element == null) return
    element.classList.add('passive')
    element.classList.remove('top')
}

function unhide(element){
    if(element == null) return
    element.classList.remove('passive')
    element.classList.add('top')
}