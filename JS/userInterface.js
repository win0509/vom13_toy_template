 /////////////////////////Header Stiky
 const header = document.querySelector('#header')
 const stickyHaeder = () => {
 const scry = window.scrollY;
 
 if(scry > 0){
  header.classList.add('active');
 }else{
  header.classList.remove('active');
 }

}
window.addEventListener('scroll', stickyHaeder);



///////////////////////Mobile Menu Toggle
const mobileBtn = document.querySelector('.mobile-btn');


toggleMobileBtn = (e) => {
 const target = e.currentTarget; //2.함수가 실행되면 현재 클릭한 지점의 요소를 target변수에 저장
 console.log(target); //3. target 변수 출력
 target.classList.toggle('active');

 if(target.classList.contains('active') /*active가 있다면*/){
  target.classList.remove('not-active') /*not-active를 없애준다*/
 }else {
  target.classList.add('not-active'); /*not-active를 추가해준다*/
 }
}

mobileBtn.addEventListener('click', toggleMobileBtn);
// 1. 클릭했을때 toggleMobileBtn 함수실행


function fitHeight(){
 const originalHeight = $('#h').height();
 $('#fh').height(originalHeight)
}


$(window).on('resize', function(){
 fitHeight();
});

$(document).ajaxComplete(function(){
 //Ajax란 Asynchronous JavaScript and XML의 약자. Ajax는 빠르게 동작하는 동적인 웹 페이지를 만들기 위한 개발 기법의 하나. Ajax는 웹 페이지 전체를 다시 로딩하지 않고도, 웹 페이지의 일부분만을 갱신할 수 있습니다. 즉 Ajax를 이용하면 백그라운드 영역에서 서버와 통신하여, 그 결과를 웹 페이지의 일부분에만 표시할 수 있습니다. 이때 서버와는 다음과 같은 다양한 형태의 데이터를 주고받을 수 있습니다.
 const productWidth = $('.product-item').width();
 $('.product-item img').height(productWidth);
 // console.log(productWidth);

   const ptexts = $('.product-text p');


  ptexts.each(function (i, item) {
    // console.log($(item).text().length);
      const tlength = $(item).text();
      function shortenText() {
      const w = $(window).width();
      let sliceLength;


      if (w < 900) {
        sliceLength = tlength.slice(0, 60) + '...';
        $(item).text(sliceLength);
      } else if (w > 901) {
        sliceLength = tlength.slice(0, 200);
        $(item).text(sliceLength);
      }
    }
    shortenText();


    $(window).on('resize', function () {
      shortenText();
    });
  });
});


// TOP-BTN


const topBtn = document.querySelector('.top-btn')

window.addEventListener('scroll', function(){
  const scrY = window.scrollY;
  if(scrY > 50){
    topBtn.style.display='block';
  }else{
    topBtn.style.display='none';
  };

});
topBtn.addEventListener('click', function(){
  window.scrollTo(0, 0)
});



