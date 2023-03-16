import 'package:flutter/material.dart';
import 'package:navbar/screens/blue.dart';
import './screens/red.dart';
import './screens/green.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {

  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {

    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'Navegator Bar',
      theme: ThemeData(
        primarySwatch: Colors.blue,
        visualDensity: VisualDensity.adaptivePlatformDensity,
      ),
      home: MyHomePage(),
    );

  }
}

class MyHomePage extends StatefulWidget {
  @override
  _MyHomePageState createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage> {

  final List<Widget> _telas = [
    Red(),
    Green(),
    Blue(),
  ];

  int paginaAtual = 0;
  void aoMudarDeAba(int indice){
    setState((){
      paginaAtual = indice;
    });
  }


  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
          title: Text("Bottom Navigation")
      ),
      body: _telas[paginaAtual],
      bottomNavigationBar: BottomNavigationBar(
        currentIndex: 0,
        onTap: aoMudarDeAba,
        items: [
          BottomNavigationBarItem(
              icon: Icon(Icons.filter_1),
              backgroundColor: Colors.red,
              label: "Red",
          ),
          BottomNavigationBarItem(
            icon: Icon(Icons.filter_2),
            backgroundColor: Colors.green,
            label: "Green",
          ),
          BottomNavigationBarItem(
            icon: Icon(Icons.filter_3),
            backgroundColor: Colors.blue,
            label: "Blue",
          ),
        ],
        selectedItemColor: Colors.black54,
      ),
    );
  }

}
