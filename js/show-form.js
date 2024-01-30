window.addEventListener('load', function(){
    let btns = document.querySelectorAll('.btn-form');
    let formAut = document.querySelector('.container-login');
    let formReg = document.querySelector('.container-registration');
    
    btns.forEach(item => {
        item.addEventListener('click', function(e) {
            showForm(e.target);
        })
    })

    let modalButton = document.querySelector('.js-open-modal');
    let closeButtons = document.querySelector('.js-modal-close');
    let modalElem = document.querySelector('.modal');
    let body = document.body;

    modalButton.addEventListener('click', function(e){
        body.classList.add('hide-scrollbar');
        modalElem.classList.add('active');
    })

    closeButtons.addEventListener('click', function(){
        body.classList.remove('hide-scrollbar');
        modalElem.classList.remove('active');
    })

    function showForm(target){
        let showForm;
        let hideForm;
    
        if(target.classList.contains('btn-into-reg')){
            showForm = formReg;
            hideForm = formAut;
        }
        else{
            showForm = formAut;
            hideForm = formReg;
        }
    
        let animHide = hideForm.animate(
            [
                { opacity: 0 },
            ], { duration: 300 }
        );
    
        let animShow;
    
        animHide.addEventListener('finish', function(){
            hideForm.classList.remove('active');
    
            showForm.classList.add('active');
    
            animShow = showForm.animate(
                [
                    { opacity: 0, },
                    { opacity: 1, },
                ], { duration: 300 }
            );
        })
    }
});

