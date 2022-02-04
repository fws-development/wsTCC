from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.keys import Keys
from time import sleep


drive = webdriver.Chrome(executable_path=r"D:\programas\chromeDrive\chromedriver.exe")
drive.maximize_window()
drive.get("http://localhost")

sleep(5)
drive.find_element_by_name("btnEntrar").click()
sleep(5)



drive.close()
