import doctest
import requests
import json

from typing import List
from bs4 import BeautifulSoup

url = "https://g1.globo.com/"

def fetch(url: str) -> str:
    return requests.get(url).content

def get_links(content:str) -> List[str]:
    parser = BeautifulSoup(content, 'html.parser')
    return[a['href'] for a in parser.find_all('a', href=True)]

def isJson(var = ''):
    result = True
    try:
        json.loads(var)
    except Exception as e:
        result = False
    return result

    news = news.find_elements_by_class_name('h1')
    if len(news) == 3:
      for new in news:
        new_json = {}
        # Getting title
        temp_title = new.find_elements_by_class_name('mainitem')
        if len(temp_title) == 1:
          title = temp_title[0].find_elements_by_class_name('title')
          if len(title) == 1:
            new_json['title'] = title[0].text
            summary = new.find_elements_by_class_name('summary')
        if len(summary) == 1:
          new_json['summary'] = summary[0].text
        # Getting url of photo
        photo = new.find_elements_by_class_name('with-photo')
        if len(photo) == 1:
          string_list = photo[0].get_attribute('style').split('"')
          for string in string_list:
            if 'http' in string: 
              new_json['photo'] = string
        result.append(new_json)
    news.quit()

def run():
  news_json = get_json()
  print(json.dumps(news_json, indent = 4))
  
if __name__ == "__main__":
  test = doctest.testmod()
  if test.failed == 0:
    run()