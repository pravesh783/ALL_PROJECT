import cv2
import  numpy as np

img=cv2.imread("lena.jpg")
cv2.imshow("Original image",img)
kernel_sharpening=np.array([[-1,-1,-1,-1,-1],
                           [-1,-1,-1,-1,-1],
                           [-1,-1,25,-1,-1],
                           [-1,-1,-1,-1,-1],
                           [-1,-1,-1,-1,-1]])
	
	
sharpened=cv2.filter2D(img,-1,kernel_sharpening)

cv2.imshow("Image sharpening",sharpened)
cv2.waitKey(0)
cv2.destroyAllWindows()
						   
						   



