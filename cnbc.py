import pycurl
print pycurl.version
import re
from HTMLParser import HTMLParser
from StringIO import StringIO
s = bytearray(1000000)
buffer = StringIO()
c = pycurl.Curl()
c.setopt(c.URL, 'https://www.cnbc.com/world/?region=world')
c.setopt(c.WRITEDATA, buffer)
c.perform()
c.close()
s = buffer.getvalue()
f = open('cnbc.html', 'w')

f.write("<hr/>")
f.write("<h2>CNBC NEWS</h2><hr/>")
for item in s.split("</div>"):
   if "headlineWrapper" in item:
       header = item [ item.find("headline") : ]
       htmlspaced = re.sub(r"<>", "<br>", header)
       htmlspaced = htmlspaced.rpartition("\">")[-1]
       htmlspaced = re.sub(r"/2017", "https://www.cnbc.com/2017", htmlspaced)
       htmlspaced = re.sub(r"href=", "target=_blank href=", htmlspaced)
       
       
       print htmlspaced       
       f.write(htmlspaced)

       
 






f.close()

