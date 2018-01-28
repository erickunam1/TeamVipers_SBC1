package com.example.fastbuy;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class HomeActivity extends AppCompatActivity implements View.OnClickListener{

    private Button buttonSaldo, buttonTransacciones, buttonFastBuy, buttonSoporte;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);

        buttonSaldo = (Button)findViewById(R.id.buttonSaldo);
        buttonTransacciones = (Button)findViewById(R.id.buttonTransactions);
        buttonFastBuy = (Button)findViewById(R.id.buttonFastBay);
        buttonSoporte = (Button)findViewById(R.id.buttonSupport);

        buttonSaldo.setOnClickListener(this);
        buttonTransacciones.setOnClickListener(this);
        buttonFastBuy.setOnClickListener(this);
        buttonSoporte.setOnClickListener(this);
    }

    @Override
    public void onClick(View view) {

        Intent i = null;

        switch (view.getId()){

            case R.id.buttonSaldo:
                i = new Intent(this, BalanceActivity.class);
            case R.id.buttonTransactions:
                break;
            case R.id.buttonFastBay:
                i = new Intent(this, MainActivity.class);
            case R.id.buttonSupport:
                break;
        }

        startActivity(i);
    }
}
