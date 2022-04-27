<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .group {
  background: #ebeff6;
  border-radius: 12px;
  width: 260px;
  height: 382px;
  border: 5px solid #fff;
  margin-right: 20px;
  position: relative;
}

.group:before {
  border: 5px solid transparent;
  border-radius: 18px;
  width: calc(100% + 10px);
  height: calc(100% + 10px);
  position: absolute;
  z-index: 2;
  content: "";
  pointer-events: none;
  left: -10px;
  top: -10px;
}

.group:hover:before {
  border-color: #3894EB;
}

.group__img img {
  border-radius: 12px 12px 0 0;
  width: 260px;
  height: 260px;
}

.group__text {
  font-weight: 600;
  font-size: 16px;
  line-height: 24px;
  color: #142D49;
  padding: 20px;
  overflow-x: hidden;
  height: 82px;
}

article {
  display: flex;
}
    </style>
<article>
  <div class="group">
    <div class="group__img">
      <img src="https://img1.freepng.ru/20180323/zsq/kisspng-bmw-car-audi-q5-logo-roundel-bmw-5ab51b5fe58e14.6872183715218184639403.jpg">
    </div>
    <div class="group__text">
      Photos
    </div>
  </div>
  <div class="group">
    <div class="group__img">
      <img src="https://static.truckersmp.com/avatarsN/2005067.1563686525.gif">
    </div>
    <div class="group__text">
      Photos
    </div>
  </div>
</article>
</body>
</html>