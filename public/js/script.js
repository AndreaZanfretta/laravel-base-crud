/* 
let del = document.getElementsByClassName('del');

del.forEach(buttons => {
    buttons.addEventListener('click', function(e){
        console.log(buttons)
    })
}); */
document.querySelectorAll('.delete').forEach(button => {
    button.addEventListener('click', function(e){
        
        res = prompt('Sei sicuro di volerlo cancellare? si/no');
        if(res === 'si'){
            
        }else{
            e.preventDefault();
        }
    });
  });

