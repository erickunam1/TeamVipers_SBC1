package com.example.fastbuy;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.TextView;
import android.widget.Toast;

import com.example.fastbuy.Classes.GetDataClass;
import com.example.fastbuy.Classes.User;
import com.example.fastbuy.Interfaces.FinLabService;
import com.google.gson.GsonBuilder;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

public class BalanceActivity extends AppCompatActivity {

    private Retrofit retrofit;
    private final String BASE_URL = "http://217.32.246.192:9091/ESBConnector/";
    private final String APIKey = "eyJhbGciOiJIUzI1NiJ9.NWE2Y2Y1MWZlMjFkYzIwOGViMWMwYTFl.PBnbs8UffQMQo9pX6bq4-pPey9dKfkVMxy4g1530AiA";

    TextView textView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_balance);

        //textView = (TextView)findViewById(R.id.textViewUserDos);

        getSupportActionBar().setTitle("Consulta de saldo");

        GsonBuilder builder = new GsonBuilder();
        builder.registerTypeAdapter(User.class, new GetDataClass());

        retrofit = new Retrofit.Builder()
                .baseUrl(BASE_URL) //url base de las peticiones
                .addConverterFactory(GsonConverterFactory.create(builder.create())) //convierte a gson
                .build();

        FinLabService finLabService = retrofit.create(FinLabService.class);

        Call<User> userCall = finLabService.getUser("BENQ0002", "01", "113182303",
                APIKey, "no-cache", "c24dfae4-7fef-652b-ac5d-c44555a720f6", "application/x-www-form-urlencoded");

        userCall.enqueue(new Callback<User>() {
            @Override
            public void onResponse(Call<User> call, retrofit2.Response<User> response) {
                User user = response.body(); //Objeto de tipo User

                Toast.makeText(BalanceActivity.this, user.getNameUser() + " " + user.getAccountUser() + " " + user.getBalanceUser(), Toast.LENGTH_LONG).show();
            }

            @Override
            public void onFailure(Call<User> call, Throwable t) {
                Toast.makeText(BalanceActivity.this, "Error", Toast.LENGTH_SHORT).show();
            }
        });

        /*OkHttpClient client = new OkHttpClient();

        MediaType mediaType = MediaType.parse("application/x-www-form-urlencoded; charset=UTF-8");

        RequestBody body = new RequestBody.create(mediaType, "trans_type=BENQ0002&account=01&custaccount=113182303");

        Request request = new Request.Builder()
                .url("http://217.32.246.192:9091/ESBConnector/esb/core/transaction")
                .post(body)
                .addHeader("x-access-token", "eyJhbGciOiJIUzI1NiJ9.NWE2Y2U1MjZlMjFkYzIwOGViMWMwOGVi.u0OMMx_MlzqLJwYgzPT1SjpBYlH705_N5fnfx4jkfWU")
                .addHeader("cache-control", "no-cache")
                .addHeader("postman-token", "4ae5b45e-c194-52c4-fe8d-c2d869db635a")
                .addHeader("content-type", "application/x-www-form-urlencoded")
                .build();

        try {
            Response response = client.newCall(request).execute();

            Toast.makeText(this, "" + response, Toast.LENGTH_LONG).show();
        } catch (IOException e) {
            e.printStackTrace();
        }*/

        /*HttpResponse<String> response = Unirest.post("http://217.32.246.192:9091/ESBConnector/esb/core/transaction")
                .header("x-access-token", "eyJhbGciOiJIUzI1NiJ9.NWE2Y2U1MjZlMjFkYzIwOGViMWMwOGVi.u0OMMx_MlzqLJwYgzPT1SjpBYlH705_N5fnfx4jkfWU")
                .header("cache-control", "no-cache")
                .header("postman-token", "494b3107-09af-fdf8-2e21-cd04222e0c59")
                .header("content-type", "application/x-www-form-urlencoded")
                .asString();*/
    }

}
