
# coding: utf-8

# In[1]:


import pandas as pd
import numpy as np
import joblib
from tensorflow.keras.models import load_model 


# In[2]:


data = pd.read_csv("HDFC.csv").iloc[:1,1:4]
data.head()


# In[3]:


df=data.values
df


# In[4]:


model=load_model("model.model")


# In[5]:


scaler=joblib.load("scaler.joblib")


# In[6]:


test=scaler.transform(df)
test


# In[7]:


test_data = np.reshape(test, (test.shape[0],test.shape[1],1))


# In[8]:


pred = model.predict(test_data)
pred[0][0]


# In[9]:


file=open("out.txt","w")
file.write(str(pred))
file.close()

