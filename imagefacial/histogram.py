# -*- coding: utf-8 -*-
"""
Created on Sat May 30 08:51:32 2020

@author: pravesh
"""

import numpy as np
import cv2 as cv
from matplotlib import pyplot as plt

img=cv.imread('sd.jpg')
#b,g,r = cv.split(img)
#img=np.zeros((200,200),np.uint8)
#cv.rectangle(img,(0,100),(200,200),(255),-1)
#cv.rectangle(img,(0,50),(100,100),(127),-1)
#cv.imshow("Img",img)
#cv.imshow("B",b)
#cv.imshow("G",g)
#cv.imshow("R",r)
hist = cv.calcHist([img],[0],None,[256],[0,256])
plt.plot(hist)
#plt.hist(img.ravel(),256,[0,256])
#plt.hist(b.ravel(),256,[0,256])
#plt.hist(g.ravel(),256,[0,256])
#plt.hist(r.ravel(),256,[0,256])
plt.show()



cv.waitKey(0)
cv.destroyAllWindows()