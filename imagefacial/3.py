import cv2

img=cv2.imread('lena.jpg')

cv2.imshow('original image',img)

print(img.shape)

print("height pixel value :",img.shape[0])
cv2.waitKey(0)

cv2.destroyAllWindows()