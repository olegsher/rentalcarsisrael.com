import pycurl
print pycurl.version
import re
from HTMLParser import HTMLParser
from StringIO import StringIO
s = bytearray(1000000)
buffer = StringIO()
c = pycurl.Curl()
c.setopt(c.URL, 'http://economictimes.indiatimes.com/headlines.cms')
c.setopt(c.WRITEDATA, buffer)
c.perform()
c.close()
s = buffer.getvalue()
f = open('indiatimes.html', 'w')

f.write("<hr/>")
f.write("<h2>IndiaTimes NEWS</h2><hr/>")
for item in s.split("</div>"):
   if "articleshow" in item:
       header = item [ item.find("<h4>") : ]
       htmlspaced = re.sub(r"</a>", "<br>", header)
       htmlspaced = htmlspaced.rpartition("\">")[-1]
       #htmlspaced = re.sub(r"/article", "http://www.reuters.com/article", htmlspaced)
       #htmlspaced = re.sub(r"href=", "target=_blank href=", htmlspaced)
       
       
       print htmlspaced       
       f.write(htmlspaced)




       


f.close()

