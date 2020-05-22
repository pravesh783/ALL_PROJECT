# Hue : 0-180 ,saturaion: 0-255,value :0-255

import cv2

img=cv2.imread('lena.jpg')


dim = (500, 500)
# resize image
resized = cv2.resize(img, dim, interpolation=cv2.INTER_AREA)

print('Resized Dimensions : ', resized.shape)

cv2.imshow("Resized image", resized)

img_HSV=cv2.cvtColor(resized,cv2.COLOR_BGR2HSV)
cv2.imshow('Hsv Image',img_HSV)

cv2.imshow('Hue channel',img_HSV[:,:,0])

cv2.imshow('Saturation',img_HSV[:,:,1])

cv2.imshow('Value channel',img_HSV[:,:,2])

cv2.waitKey(0)

cv2.destroyAllWindows()