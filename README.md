CSRF Land
==

จุดประสงค์ เพื่อเรียนรู้และทดสอบการโจมตีด้วยเทคนิค CSRF (Cross-Site Request Forgery )
อย่างถูกกฏหมายและเข้าใจจริงโดยลงมือทำจริงในสถานการณ์จำลองหลากหลายรูปแบบ

Cross-Site Request Forgery (CSRF) คืออะไร ?
----
CSRF คือการโจมตีผู้ใช้งานบนเว็บโดยผู้โจมตีจะการเขียนสคริปท์เพื่อหลอกล่อและบังคับให้ผู้ใช้งานเว็บทำสิ่งต่าง ๆ โดยไม่ได้ตั้งใจ หรือไม่ทันรู้ตัว โดยจะทำให้การกระทำต่าง ๆ นั้นถูกใช้งานโดยสิทธิ์ของผู้ใช้งานเว็บไซด์นั้นอยู่ เช่นถ้าใช้งานเว็บไซด์ A ด้วยสิทธิ์ user B อยู่เมื่อถูกโจมตีด้วยช่องโหว่ CSRF ก็จะทำให้คำสั่งนั้นถูกรันด้วยสิทธิ์ของ user B บนเว็บ A , ตัวอย่างผลการโจมตีสำเร็จคือ การเปลี่ยนรหัสผ่านหรืออีเมล ของผู้ใช้งานเว็บไซด์, การทำให้ผู้ใช้งานส่งข้อความหาคนอื่น (spam), การเพิ่ม user ใหม่ หรือใช้งานความสามารถของเว็บด้วยสิทธิ์ของผู้ดูแลระบบได้

Screenshots
----

![Screenshot1](https://raw.githubusercontent.com/pich4ya/csrf-land/master/screenshot1.png)
![Screenshot2](https://raw.githubusercontent.com/pich4ya/csrf-land/master/screenshot2.png)
![Screenshot3](https://raw.githubusercontent.com/pich4ya/csrf-land/master/screenshot3.png)

Installation
----

You can download the latest tarball by clicking [here](https://github.com/pich4ya/csrf-land/archive/master.zip).

Links
----

* 2600 Thailand Group: https://www.facebook.com/groups/2600Thailand/