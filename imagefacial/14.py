import cv2
import numpy as np

img=cv2.imread("lena.jpg")

cv2.imshow("Origianl image",img)

cv2.waitKey(0)
#M=np.ones(img.shape,dtype="uint8")*150
M=np.zeros(img.shape,dtype="uint8")+150
added=cv2.add(img,M)

cv2.imshow("Added",added)

cv2.waitKey(0)

subtracted=cv2.subtract(img,M)
cv2.imshow("Subtract",subtracted)
cv2.waitKey(0)

mul=cv2.multiply(img,M)
cv2.imshow("Multiply",mul)
cv2.waitKey(0)

cv2.destroyAllWindows()