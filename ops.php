<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>عرض الصفحات</title>
  <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* استيل للزر */
.button {
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    background-color: #4CAF50; /* لون الخلفية */
    color: white; /* لون النص */
    border-radius: 5px; /* زوايا مستديرة */
    cursor: pointer; /* تغيير المؤشر إلى يد لإظهار أنه زر قابل للنقر */
    margin: 5px; /* هامش حول الزر */
  }
  
  .button:hover {
    background-color: #45a049; /* تغيير لون الخلفية عند تحويم المؤشر */
  }
  
  .button:active {
    background-color: #3e8e41; /* تغيير لون الخلفية عند النقر */
  }
  
  /* تصميم Flexbox */
  .container {
    display: flex;
    align-items: flex-end; /* توجيه العناصر إلى أسفل الصفحة */
    justify-content: center; /* توسيط العناصر أفقياً */
    min-height: 100vh; /* جعل الحاوية تمتد لارتفاع الشاشة بالكامل */
  }
  
  .button-container {
    margin-bottom: 20px; /* هامش بين الزر وأسفل الصفحة */
  }
  
</style>
<body>

<div class="container">
  <div class="button-container">
    <a href="3 اعدادي.php" class="button">الذهاب إلى الصفحة 1</a>
  </div>
</div>

</body>
</html>

