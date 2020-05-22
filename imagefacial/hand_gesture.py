# -*- coding: utf-8 -*-
"""
Created on Fri May 22 08:35:05 2020

@author: pravesh
"""

import cv2
import numpy as np
hand=cv2.imread('capture.png',0)
big=cv2.resize(hand,(500,500))
ret,the=cv2.threshold(big,70,255,cv2.THRESH_BINARY)


contours,_ = cv2.findContours(the.copy(),cv2.RETR_TREE,cv2.CHAIN_APPROX_SIMPLE)

hull=[cv2.convexHull(c) for c in contours]

final= cv2.drawContours(big,hull,-1,(255,0,0))

cv2.imshow('Original Image',big)

cv2.imshow('Threshold',the)
cv2.imshow("Convex Hull",final)
cv2.waitKey(0)
cv2.destroyAllWindows()