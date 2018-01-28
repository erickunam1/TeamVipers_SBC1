package com.example.fastbuy.Interfaces;

import com.example.fastbuy.Classes.User;

import retrofit2.Call;
import retrofit2.http.Header;
import retrofit2.http.Headers;
import retrofit2.http.POST;
import retrofit2.http.Query;

/**
 * Created by Javier on 27/01/2018.
 */

public interface FinLabService {

    @POST("esb/core/transaction")
    Call<User> getUser(@Query("trans_type") String typeTrans, @Query("account") String account, @Query("custaccount") String custaccoutn,
                       @Header("x-access-token") String key, @Header("cache-control") String cache, @Header("postman-token") String keyPostman,
                       @Header("content-type") String content);
}
