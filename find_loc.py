import os
import time
import random
import pandas as pd
import json
import requests
import sys
from bs4 import BeautifulSoup

addr = sys.argv[1]
url = "https://www.google.com/maps/place?q=" + addr
response = requests.get(url)
soup = BeautifulSoup(response.text, "html.parser")
text = soup.prettify() #text 包含了html的內容
initial_pos = text.find(";window.APP_INITIALIZATION_STATE")
#尋找;window.APP_INITIALIZATION_STATE所在位置
data = text[initial_pos+36:initial_pos+85] #將其後的參數進行存取
line = tuple(data.split(',')) #註1
num1 = line[1] # latitude
num2 = line[2] # longitude
print(num1)
print(num2)
