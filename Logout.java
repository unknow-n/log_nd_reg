package com.example.nightmare.myapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class Logout extends AppCompatActivity implements View.OnClickListener {
    EditText name;
    Button logout;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        name = (EditText) findViewById(R.id.t1);
        logout = (Button) findViewById(R.id.b3);

        logout.setOnClickListener(this);

    }

    @Override
    public void onClick(View view) {
        switch (view.getId()) {
            case R.id.b3:
                startActivity(new Intent(this, MainActivity.class));
                break;

        }
    }
}
