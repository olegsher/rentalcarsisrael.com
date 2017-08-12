import pycurl
print pycurl.version
import re
from HTMLParser import HTMLParser
from StringIO import StringIO
s = bytearray(1000000)
buffer = StringIO()
c = pycurl.Curl()
c.setopt(c.URL, 'http://rent-a-car-il.livejournal.com/tag/%D0%B0%D0%BA%D1%86%D0%B8%D1%8F')
c.setopt(c.WRITEDATA, buffer)
c.perform()
c.close()
s = buffer.getvalue()
f = open('livejournal', 'w')


for item in s.split("</div>"):
   if "</h2>" in item:
       header = item [ item.find("asset-header-content-inner") : ]
       header = re.sub(r"asset-header-content-inner\">", "", header)
       header = re.sub(r"<div class=\"asset-meta asset-entry-date\">", "", header)
       header = re.sub(r"class=\"item\"", "", header)
       header = re.sub(r"<ul class=\"asset-meta-list clearfix\">", "", header)
       header = re.sub(r"<li ><span><abbr class=\"datetime\">", "", header)
       header = re.sub(r"</ul>", "", header) 
       header = re.sub(r"</abbr></span></li>", "", header) 
       header = re.sub(r"a href", "a target=\"_blank\" href", header)
       header = re.sub(r"Mar. 22nd, 2016 at 2:37 PM", "<br><img src=\"http://ic.pics.livejournal.com/oleg_blogger/19601399/5596/5596_original.gif\" alt=\"\"/>", header)
       header = re.sub(r"h2", "h4", header)
       
        
       print header  
       f.write(header)
f.close()

