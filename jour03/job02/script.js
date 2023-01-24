let divToMove;
const imgArr = $(".image-container");
const randomContainers = $(".random-container__section");
const verify = $('#verify');




function shuffle () {
  const shuffleArr = imgArr.sort(function () {
    return Math.random() - 0.5;
  });

  for (let i in randomContainers) {
    randomContainers[i].append(shuffleArr[i]);
  }
  
  $('.game-status').html(' ');
}

$('#shuffle')
    .on('click', $('#verify'), () => {
        shuffle();        
    });    

$('.image-container').click((e) => {    
    divToMove = $(e.currentTarget);
});

$('.main-container__section').click((e) => {
    $(e.currentTarget).append(divToMove);     
});

$('#verify').click(() => {
    var arrToVerify = $('.image-container');
    let counter = 1;
    for (let i of arrToVerify) {
        if (i.id != counter) {
            $('.game-status').html('<h2 class="red">YOU LOST!</h2>');
            break;
        } else {
            counter++;
        }
    }
    if (counter == arrToVerify.length + 1) { $('.game-status').html('<h2 class="green">YOU WON!</h2>'); }
});


// function disable(el) {
//     verify.prop('disabled', true);
// }




