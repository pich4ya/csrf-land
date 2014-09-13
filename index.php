<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Pichaya Morimoto">
		<title> CSRF Land by Pichaya Morimoto </title>
		<script src="assets/js/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<style type="text/css">
body{margin:40px;}

.process-row {
    display: table-row;
}

.process {
    display: table;     
    width: 100%;
    position: relative;
}

.process-row:before {
    top: 50px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
    
}

.process-step {    
    display: table-cell;
    text-align: center;
    position: relative;
}

.process-step p {
    margin-top:10px;
    
}

.btn-circle {
  width: 100px;
  height: 100px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
.glyphicon{
    font-size: 5em;
}
</style>
	</head>
	<body>
<div class="container">
    <div class="process">
    <div class="process-row">
        <div class="process-step http-get" data-url="catshop.php">
            <button type="button" class="btn btn-default btn-circle"><span class="glyphicon glyphicon-floppy-open"></span></button>
            <p>HTTP GET</p>
        </div>
        <div class="process-step http-post" data-url="post/catshop.php">
            <button type="button" class="btn btn-default btn-circle"><span class="glyphicon glyphicon-floppy-save"></span></button>
            <p>HTTP POST</p>
        </div>
        <div class="process-step http-post-withtoken" data-url="post_withtoken/catshop.php">
            <button type="button" class="btn btn-default btn-circle" ><span class="glyphicon glyphicon-floppy-saved"></span></button>
            <p>HTTP POST with Anti-CSRF Token</p>
        </div> 
         <div class="process-step exploits" data-url="exploits/">
            <button type="button" class="btn btn-success btn-circle" ><span class="glyphicon glyphicon-fire"></span></button>
            <p>Exploits</p>
        </div> 
    </div>
    </div>
    <div class="container">
        <div class="jumbotron">
        <h3>CSRF Land Challenge</h3>
        <p>จุดประสงค์ เพื่อเรียนรู้และทดสอบการโจมตีด้วยเทคนิค CSRF อย่างถูกกฏหมายและเข้าใจจริงโดยลงมือทำจริงในสถานการณ์จำลองหลากหลายรูปแบบ</p>
        <h3>Cross-Site Request Forgery (CSRF) คืออะไร ?</h3>
        <p>CSRF คือการโจมตีผู้ใช้งานบนเว็บโดยผู้โจมตีจะการเขียนสคริปท์เพื่อหลอกล่อและบังคับให้ผู้ใช้งานเว็บทำสิ่งต่าง ๆ โดยไม่ได้ตั้งใจ หรือไม่ทันรู้ตัว โดยจะทำให้การกระทำต่าง ๆ นั้นถูกใช้งานโดยสิทธิ์ของผู้ใช้งานเว็บไซด์นั้นอยู่ เช่นถ้าใช้งานเว็บไซด์ A ด้วยสิทธิ์ user B อยู่เมื่อถูกโจมตีด้วยช่องโหว่ CSRF ก็จะทำให้คำสั่งนั้นถูกรันด้วยสิทธิ์ของ user B บนเว็บ A , ตัวอย่างผลกระทบเมื่อการโจมตีสำเร็จคือ การเปลี่ยนรหัสผ่านหรืออีเมล ของผู้ใช้งานเว็บไซด์, การทำให้ผู้ใช้งานส่งข้อความหาคนอื่น (spam), การเพิ่ม user ใหม่ หรือใช้งานความสามารถของเว็บด้วยสิทธิ์ของผู้ดูแลระบบได้</p>
        <p>แหล่งอ้างอิง: <a href="https://www.owasp.org/index.php/Cross-Site_Request_Forgery_(CSRF)">OWASP.org</a>, <a href="https://www.blognone.com/node/37959">Blognone.com</a></p>
        <hr/>
        <h3>Walk through lesson 1 : HTTP GET</h3>
        <p>เร็ว ๆ นี้จ้า..</p>
        <h3>Walk through lesson 2 : HTTP POST</h3>
        <p>เร็ว ๆ นี้จ้า..</p>
        <h3>Walk through lesson 3 : HTTP POST with Anti-CSRF Token</h3>
        <p>เร็ว ๆ นี้จ้า..</p>
        </div>
    </div>
</div>
<script type="text/javascript">
$(function(){
    $('.process-step').click(function(e) {
        e.preventDefault();
        window.location = $(this).data('url');
    });
});
</script>
	</body>
</html>