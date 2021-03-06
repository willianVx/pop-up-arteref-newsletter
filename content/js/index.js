jQuery(document).ready(function($){
    $('#modal_subscribeform').hide();
    if (typeof(Storage) !== "undefined") {
        // Code for localStorage/sessionStorage.
        modal_local_storage();
    } else {
        // Sorry! No Web Storage support..
        console.log('Sorry! No Web Storage support..');
    }
    //armazena estado do modal / true para ainda não foi mostrado e false para já mostrado
    function modal_local_storage(){
        if (sessionStorage.getItem("modal_subscribeform")) {
            return;
        }
        else{
            setTimeout(() => {
                $('#modal_subscribeform').show();
                $('#modal_subscribeform').modal('show');
            }, 4000);

        }
        sessionStorage.setItem("modal_subscribeform", true);
    }
});