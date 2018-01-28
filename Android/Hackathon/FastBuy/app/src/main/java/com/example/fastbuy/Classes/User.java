package com.example.fastbuy.Classes;

/**
 * Created by Javier on 27/01/2018.
 */

public class User {

    private String nameUser;
    private String accountUser;
    private int balanceUser;

    public User() {
    }

    public User(String nameUser, String accountUser, int balanceUser) {
        this.nameUser = nameUser;
        this.accountUser = accountUser;
        this.balanceUser = balanceUser;
    }

    public String getNameUser() {
        return nameUser;
    }

    public void setNameUser(String nameUser) {
        this.nameUser = nameUser;
    }

    public String getAccountUser() {
        return accountUser;
    }

    public void setAccountUser(String accountUser) {
        this.accountUser = accountUser;
    }

    public int getBalanceUser() {
        return balanceUser;
    }

    public void setBalanceUser(int balanceUser) {
        this.balanceUser = balanceUser;
    }
}
