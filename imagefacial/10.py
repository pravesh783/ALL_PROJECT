import cv2
import numpy as np

img=cv2.imread("lena.jpg")

rotated_img=cv2.transpose(img)

cv2.imshow("Original image",img)

cv2.imshow("Rotated Image",rotated_img)

cv2.waitKey(0)
cv2.destroyAllWindows()