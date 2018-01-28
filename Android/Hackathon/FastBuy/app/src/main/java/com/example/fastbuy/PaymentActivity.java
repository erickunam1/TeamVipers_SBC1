package com.example.fastbuy;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.TextView;

public class PaymentActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_payment);

        Bundle bundle = getIntent().getExtras();

        TextView textViewInfo = (TextView)findViewById(R.id.textViewInfo);

        textViewInfo.setText(bundle.getString("info"));

    }
}
