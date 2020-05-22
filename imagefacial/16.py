import cv2
import numpy as np

img=cv2.imread("lena.jpg")
cv2.imshow("Original Image",img)
cv2.waitKey(0)


kernel_3x3=np.ones((3,3),np.float)/9

blurred=cv2.filter2D(img,-1,kernel_3x3)
cv2.imshow("3X3 Kernel Blurring",blurred)
cv2.waitKey(0)

kernel_7X7=np.ones((7,7),np.float)/49
blurred2=cv2.filter2D(img,-1,kernel_7X7)
cv2.imshow("7X7 Kernel Blurring",blurred2)
cv2.waitKey(0)