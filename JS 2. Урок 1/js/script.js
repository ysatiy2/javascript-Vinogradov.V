//ES6

const goods = [
  { title: 'Куртка', price: 1000 },
  { title: 'Футболка', price: 300 },
  { title: 'Кепка', price: 350 },
  { title: 'Ботинки', price: 2000 },
];
const renderGoodsItem = (title, price) => {
  return `<div class="goods-item"><h3>${title}</h3><p>${price}</p></div>`;
};

const renderGoodsList = (list) => {
  let goodsList = list.map(item => renderGoodsItem(item.title, item.price));
  document.querySelector('.goods-list').innerHTML = goodsList;
}
renderGoodsList(goods);

//ES5

