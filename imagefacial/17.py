import cv2
import numpy as np

img=cv2.imread("lena.jpg")
cv2.imshow("Original Image",img)
cv2.waitKey(0)

blur=cv2.blur(img,(3,3))
cv2.imshow("Blur Image",blur)
cv2.waitKey(0)

Gaussian=cv2.GaussianBlur(img,(7,7),0)
cv2.imshow("Gaussian Image",Gaussian)
cv2.waitKey(0)


Median=cv2.medianBlur(img,5)
cv2.imshow("Median Blur Image",Median)
cv2.waitKey(0)


bilateral=cv2.bilateralFilter(img,9,75,75)
cv2.imshow("Bilateral Image",bilateral)
cv2.waitKey(0)

cv2.destroyAllWindows()