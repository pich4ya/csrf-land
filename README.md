CSRF Land
==

จุดประสงค์ เพื่อเรียนรู้และทดสอบการโจมตีด้วยเทคนิค CSRF (Cross-Site Request Forgery )
อย่างถูกกฏหมายและเข้าใจจริงโดยลงมือทำจริงในสถานการณ์จำลองหลากหลายรูปแบบ

Cross-Site Request Forgery (CSRF) คืออะไร ?
----
CSRF คือการโจมตีผู้ใช้งานบนเว็บโดยผู้โจมตีจะทำการเขียนสคริปท์เพื่อหลอกล่อและบังคับให้ผู้ใช้งานเว็บทำสิ่งต่าง ๆ โดยไม่ได้ตั้งใจ หรือไม่ทันรู้ตัว โดยจะทำให้การกระทำต่าง ๆ นั้นถูกใช้งานโดยสิทธิ์ของผู้ใช้งานเว็บไซด์นั้นอยู่ เช่นถ้าใช้งานเว็บไซด์ A ด้วยสิทธิ์ user B อยู่เมื่อถูกโจมตีด้วยช่องโหว่ CSRF ก็จะทำให้คำสั่งนั้นถูกรันด้วยสิทธิ์ของ user B บนเว็บ A , ตัวอย่างผลกระทบเมื่อการโจมตีสำเร็จคือ การเปลี่ยนรหัสผ่านหรืออีเมล ของผู้ใช้งานเว็บไซด์, การทำให้ผู้ใช้งานส่งข้อความหาคนอื่น (spam), การเพิ่ม user ใหม่ หรือใช้งานความสามารถของเว็บด้วยสิทธิ์ของผู้ดูแลระบบได้

วิธีป้องกันการโจมตีด้วย CSRF
----
เมื่อไรที่ต้องการส่งข้อมูลให้สร้างค่าสุ่ม (anti-CSRF token) และซ่อนแนบมากับข้อมูลปกติด้วยและทำการตรวจสอบอีกครั้งเมื่อทำการรับข้อมูลว่าค่านั้นยังคงถูกต้อง โดยค่าที่ว่าควรจะไม่สามารถเดาได้โดย user อื่น ๆ (อาจจะ 1 ค่าต่อ 1 session ของ user, 1 ค่าต่อ 1 module ในเว็บ ต่อ 1 user, หรือเปลี่ยนค่าใหม่ทุกครั้งหลังจากใช้ค่าเดิมไปแล้วก็ได้)
ศึกษาข้อมูลเพิ่มเติมได้ที่ [OWASP CSRF Prevention Cheat Sheet](https://www.owasp.org/index.php/Cross-Site_Request_Forgery_(CSRF)_Prevention_Cheat_Sheet)

Screenshots
----

![Screenshot1](https://raw.githubusercontent.com/pich4ya/csrf-land/master/screenshot1.png)
![Screenshot2](https://raw.githubusercontent.com/pich4ya/csrf-land/master/screenshot2.png)
![Screenshot3](https://raw.githubusercontent.com/pich4ya/csrf-land/master/screenshot3.png)

Installation
----
Tested on Ubuntu 14.04, Apache/2.4.7, PHP 5.5.9

1. You can download the latest tarball by clicking [here](https://github.com/pich4ya/csrf-land/archive/master.zip).
2. Extract files into your web document root (ex. Apache 2)
3. $ vim /etc/hosts

127.0.0.1 localhost csrf-land.local

Links
----

* 2600 Thailand Group: https://www.facebook.com/groups/2600Thailand/
* Cross-Site Request Forgery (CSRF): https://www.owasp.org/index.php/Cross-Site_Request_Forgery_(CSRF)
* Testing for CSRF (OTG-SESS-005): https://www.owasp.org/index.php/Testing_for_CSRF_(OTG-SESS-005)
* Cross-Site Request Forgery (CSRF) Prevention Cheat Sheet: https://www.owasp.org/index.php/Cross-Site_Request_Forgery_(CSRF)_Prevention_Cheat_Sheet