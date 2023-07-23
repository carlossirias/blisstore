import { Modal } from 'flowbite'

const errors = document.getElementById('errors')
console.log('SHI')
document.addEventListener('DOMContentLoaded', function(){
    console.log("errors")
    if(errors)
    {
        const $targetEl = document.getElementById('authentication-modal');
        const modal = new Modal($targetEl);

        modal.show()
        console.log('YA')
    }
})