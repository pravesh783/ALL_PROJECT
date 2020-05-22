import cv2
import numpy as np

windowname='Drawing'
img=np.zeros((512,512,3),np.uint8)

cv2.namedWindow(windowname)

def draw_circle(event,x,y,flag,param):
	if event==cv2.EVENT_LBUTTONDBLCLK:
		cv2.circle(img,(x,y),40,(0,255,0),-1)
	
	if event == cv2.EVENT_MBUTTONDOWN:
		cv2.circle(img, (x, y), 20, (0, 0, 255), -1)
	
	if event == cv2.EVENT_RBUTTONDOWN:
		cv2.circle(img, (x, y), 30, (255, 0, 0), -1)

cv2.setMouseCallback(windowname,draw_circle)

while True:
	cv2.imshow(windowname,img)
	if cv2.waitKey(1)==13:
		break
		
cv2.destroyAllWindows()

