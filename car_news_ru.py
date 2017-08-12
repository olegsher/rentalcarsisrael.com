import pycurl
print pycurl.version
import re
from HTMLParser import HTMLParser
from StringIO import StringIO
s = bytearray(1000000)
buffer = StringIO()
c = pycurl.Curl()
c.setopt(c.URL, 'http://www.kolesa.ru/news')
c.setopt(c.WRITEDATA, buffer)
c.perform()
c.close()
s = buffer.getvalue()

f = open('car_news', 'w')
for item in s.split("</div>"):
   if "h6" in item:
       header = item [ item.find("h6") : ]
       header = re.sub(r"h6 class=\"pe-title\">", "<h3>", header)
       header = re.sub(r"</h6>", "</h3>", header)
       header = re.sub(r"<p>", "<p> --- ", header)   
       print header
       f.write(header)
f.close()