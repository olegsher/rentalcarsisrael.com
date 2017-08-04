#!/usr/bin/env python2
#encoding: UTF-8

# To change this license header, choose License Headers in Project Properties.
# To change this template file, choose Tools | Templates
# and open the template in the editor.

import pycurl
print pycurl.version
import re
from HTMLParser import HTMLParser
from StringIO import StringIO
s = bytearray(1000000)
buffer = StringIO()
c = pycurl.Curl()
c.setopt(c.URL, 'https://www.washingtonpost.com/')
c.setopt(c.WRITEDATA, buffer)
c.perform()
c.close()
s = buffer.getvalue()
f = open('cnn.html', 'w')

for item in s.split("</div>"):
   if "headline" in item:
       header = item [ item.find("<a href=\"/index.html") : ]
       print header
       htmlspaced = re.sub(r"</h2>", "<br>", header)
       htmlspaced = htmlspaced.rpartition("\">")[-1]
       #htmlspaced = re.sub(r"/article", "http://www.reuters.com/article", htmlspaced)
       htmlspaced = re.sub(r"href=", "target=_blank href=", htmlspaced)
       
       
       print htmlspaced       
       f.write(htmlspaced)
f.write("<hr/>")





       


f.close()
