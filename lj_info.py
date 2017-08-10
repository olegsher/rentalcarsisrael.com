import pycurl
print pycurl.version
import re
from HTMLParser import HTMLParser
from StringIO import StringIO
s = bytearray(1000000)
buffer = StringIO()
c = pycurl.Curl()
c.setopt(c.URL, 'http://rent-a-car-il.livejournal.com/tag/%D0%BF%D0%BE%D0%BB%D0%B5%D0%B7%D0%BD%D0%B0%D1%8F%20%D0%B8%D0%BD%D1%84%D0%B0')
c.setopt(c.WRITEDATA, buffer)
c.perform()
c.close()
s = buffer.getvalue()
f = open('livejournal_info', 'w')

#f.write("<hr/>")
#f.write("<h2>LiveJournal</h2><hr/>")
for item in s.split("</div>"):
   if "asset-header" in item:
       header = item [ item.find("h2") : ]
       htmlspaced = re.sub(r"h2", " ", header)
       #htmlspaced = re.sub(r"<ul class=\"asset-meta-list clearfix\">", " ", header)
       #htmlspaced = re.sub(r"</li>", "", header)       


       htmlspaced = htmlspaced.rpartition("header2\">")[-1]
       #htmlspaced = re.sub(r"/article", "http://www.reuters.com/article", htmlspaced)
       #htmlspaced = re.sub(r"<hr/>>", "<hr/>", htmlspaced)
       #f.write("<hr/>") 
       
       print htmlspaced       
       f.write(htmlspaced)




f.close()

