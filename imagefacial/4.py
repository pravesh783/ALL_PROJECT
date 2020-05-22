import cv2

img=cv2.imread('lena.jpg')

cv2.imshow('original image',img)


cv2.waitKey(0)
gray_img=cv2.cvtColor(img,cv2.COLOR_BGR2GRAY)
cv2.imshow("Gray scale image",gray_img)
cv2.waitKey(0)
cv2.destroyAllWindows()