const products = document.querySelector('.products');
//변수 저장 문서 선택한다 .products를
// console.log(products)

//const 변하지않는수
//let 변경가능

const getProductData = async () => {
//async 실행되면 어떤걸 받아라
await fetch('JS/products.json')
//fetch 안에 들어오는 데이터 받아라 비동기화됨
.then((response) => response.json())
// response 받으면 json(어떤프로그래밍을 넣어도 형식유지시켜주는 것 중 하나.....?)에 받는다
.then((data) => {
 let dataElmt;
 // console.log(data[1]);
 // console.log(data[0].pro_price);

 data.map((item) => {
  console.log(item);
  dataElmt = `
  <div class="product-frame">
  <div class="product-item">
    <img src="images/${item.pro_img}" alt="">
    <div class="product-text">
      <h4>${item.pro_name}</h4>
      <strong>₩${item.pro_price
       .toString() .replace(/\B(?=(\d{3})+(?!\d))/g, ',')}</strong>
      <p>${item.pro_desc}</p>
      <a href="#" class="common-btn">자세히 보기</a>
    </div>
  </div>
</div> 
  `;

  products.innerHTML += dataElmt;
 });

})
.catch((err) => console.log(err));
//에러뜨면 콘솔로 보여줘라

};

getProductData();