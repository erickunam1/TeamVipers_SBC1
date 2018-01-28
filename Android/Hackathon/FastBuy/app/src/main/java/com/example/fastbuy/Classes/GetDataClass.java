package com.example.fastbuy.Classes;

import com.google.gson.JsonDeserializationContext;
import com.google.gson.JsonDeserializer;
import com.google.gson.JsonElement;
import com.google.gson.JsonParseException;

import java.lang.reflect.Type;

/**
 * Created by Javier on 27/01/2018.
 */

public class GetDataClass implements JsonDeserializer<User> {
    @Override
    public User deserialize(JsonElement json, Type typeOfT, JsonDeserializationContext context) throws JsonParseException {

        String name = json.getAsJsonObject().get("data").getAsJsonObject().get("accountHolderName").getAsString();
        String account = json.getAsJsonObject().get("data").getAsJsonObject().get("entityId").getAsString();
        /*int balance = json.getAsJsonObject().get("data").getAsJsonObject().get("message").getAsJsonObject().get("Amount")
                .getAsJsonObject().get("_").getAsInt();*/

        int balance = 500000;

        User user = new User(name, account, balance);

        return user;
    }
}
