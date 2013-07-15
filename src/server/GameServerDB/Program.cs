using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading;
using System.Threading.Tasks;
using WebSocketSharp;
using WebSocketSharp.Server;
using GameServerDB.UserManager;
using GameServerDB.ChanelManager;

namespace GameServerDB
{
    class Program
    {
        public static List<UserClass> Users = new List<UserClass>();
        public static List<Chanel> Chanels = new List<Chanel>();
        public static MySqlBase _SQL = new MySqlBase();
        static void Main(string[] args)
        {
            LogConsole._Load();
            LogDebug.debug = true;
            _SQL.Init("localhost", "root", "123456", "db_clone", 3306);
            var wssv = new WebSocketServiceHost<Serverb>("ws://192.168.1.5:9002");
            
            wssv.OnError += (sender, e) =>
                {
                    LogConsole.Show("[WS]: Error {0} ", e.Message);
                };

            wssv.Start();
            LogConsole.Show("Server Listening on port: {0}", wssv.Port);
            while (true)
            {
                Thread.Sleep(1000);

                string _comm = Console.ReadLine();
                switch (_comm)
                {
                    case "count":
                        Console.WriteLine("Users Online: {0}",Users.Count());
                        break;
                    default:
                        break;
                }
            }
            //Console.ReadKey();
        }
    }
}
