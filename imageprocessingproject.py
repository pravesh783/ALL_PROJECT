import pyautogui
from PIL import Image,ImageGrab
import time
#from numpy import asarray

def hit(key):
	pyautogui.keyDown(key)
	return


#def draw():

def iscollide(data):
	# draw rectangle for bird
	for i in range(270, 320):
		for j in range(360, 440):
			if data[i, j] < 170:
				hit("down")
	for i in range(290, 430):
		for j in range(360, 400):
			if data[i, j] < 100:
				hit("up")
				return True
	return False


 


if __name__=="__main__":
	print("Daino game star in 3 sec")
	time.sleep(3)
	hit('up')
	while True:
		image = ImageGrab.grab().convert("L")
		data = image.load()
		iscollide(data)
		
		# print(asarray(image))
		#draw the rectangle for cactus
		'''for i in range(290, 430):
			for j in range(360, 400):
				data[i, j] =0
		
		#draw rectangle for bird
		for i in range(270, 320):
			for j in range(250, 350):
				data[i, j] =130
		image.show()
		break
	'''