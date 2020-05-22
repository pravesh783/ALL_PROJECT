import cv2
import numpy as np

img=cv2.imread("lena.jpg")

cv2.imshow("Original image",img)

cv2.waitKey(0)
#1
img_scaled=cv2.resize(img,None,fx=0.75,fy=0.75)
cv2.imshow("Scaling Linear Interplotation",img_scaled)
cv2.waitKey(0)
#2
img_scaled1=cv2.resize(img,None,fx=2,fy=2,interpolation=cv2.INTER_CUBIC)
cv2.imshow("Scaling Cubic Interplotation",img_scaled1)
cv2.waitKey(0)
#3
img_scaled2=cv2.resize(img,(900,400),interpolation=cv2.INTER_AREA)
cv2.imshow("Scaling skewed Interplotation",img_scaled2)
cv2.waitKey(0)
cv2.destroyAllWindows()

cv2.destroyAllWindows()

cv2.destroyAllWindows()