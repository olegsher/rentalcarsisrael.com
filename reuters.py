import pycurl
print pycurl.version
import re
from HTMLParser import HTMLParser
from StringIO import StringIO
s = bytearray(1000000)
buffer = StringIO()
c = pycurl.Curl()
c.setopt(c.URL, 'http://www.reuters.com')
c.setopt(c.WRITEDATA, buffer)
c.perform()
c.close()
s = buffer.getvalue()
f = open('reuters.html', 'w')

f.write("<hr/>")
f.write("<h2>TOP NEWS</h2><hr/>")
for item in s.split("</div>"):
   if "<h2 class=\"story-title\">" in item:
       header = item [ item.find("<a href=\"/article") : ]
       htmlspaced = re.sub(r"</h2>", "<br>", header)
       htmlspaced = htmlspaced.rpartition("\">")[-1]
       htmlspaced = re.sub(r"/article", "http://www.reuters.com/article", htmlspaced)
       htmlspaced = re.sub(r"href=", "target=_blank href=", htmlspaced)
       
       
       #print htmlspaced       
       f.write(htmlspaced)



f.write("<hr/>")
f.write("<h3>MORE TOP NEWS</h3><hr/>")
for item in s.split("</div>"):
   if "<h3 class=\"story-title\">" in item:
       header = item [ item.find("<a href=\"/article") : ]
       htmlspaced = re.sub(r"</h3>", "<br>", header)
       htmlspaced = htmlspaced.rpartition("\">")[-1]
       htmlspaced = re.sub(r"/article", "http://www.reuters.com/article", htmlspaced)
       htmlspaced = re.sub(r"href=", "target=_blank href=", htmlspaced)
       
       
       #print htmlspaced
       f.write(htmlspaced)
       


f.close()

